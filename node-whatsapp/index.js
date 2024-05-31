const { Client, LocalAuth } = require('whatsapp-web.js');
const qrcode = require('qrcode-terminal');
const http = require('http');
const url = require('url');
const mysql = require('mysql');

const client = new Client({
    authStrategy: new LocalAuth()
});

// Create MySQL connection
const connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: '',
    database: 'kp_db'
});

connection.connect(error => {
    if (error) {
        console.error('Database connection failed:', error.stack);
        return;
    }
    console.log('Connected to database.');
});

client.on('qr', (qr) => {
    qrcode.generate(qr, { small: true });
    console.log('QR Code:', qr);
});

client.on('ready', () => {
    console.log('Client is ready!');
});

client.on('message_create', message => {
    console.log('Message received:', message.body);

    //check message if broadcast
    if (message.broadcast) {
        console.log('Broadcast message received. Skipping database save.');
    } else {
        // Save the message to the database
        const query = 'INSERT INTO messages (phone, message, created_at, updated_at) VALUES (?, ?, NOW(), NOW())';
        connection.query(query, [message.from, message.body], (error, results) => {
            if (error) {
                console.error('Failed to save message:', error);
            } else {
                console.log('Message saved to database.');
            }
        });
    }

    // Function to send message with delay
    const sendMessageWithDelay = (phone, message, delay) => {
        setTimeout(() => {
            client.sendMessage(phone, message);
        }, delay);
    };

    if (message.body === '!ping') {
        sendMessageWithDelay(message.from, 'bot berhasil menjawab', 2000);
    } else if (message.body.toLowerCase() === 'assalamualaikum') {
        sendMessageWithDelay(message.from, 'Waalaikumsalam', 2000);
    } else if (message.body === '!admin') {
        sendMessageWithDelay(message.from, 'Anda akan berbicara dengan Admin, silahkan tunggu', 2000);
    } else if (message.body === '!info') {
        sendMessageWithDelay(message.from, 'Informasi terkini hari ini: -blank-', 2000);
    } else if (message.body === '!menu') {
        sendMessageWithDelay(message.from, '1. !ping (memanggil Bot)\n 2. !admin (memanggil Admin)\n 3. !info (mencari informasi terbaru)\n 4. !menu (menampilkan Menu)\n 5. !jadwal (melihat jadwal BKPSDM)\n 6. !alamat (Alamat BKPSDM)\n 7. !telp (Kontak BKPSDM)\n 8. !email (Email BKPSDM)', 2000);
    } else if (message.body === 'P') {
        sendMessageWithDelay(message.from, 'Y', 2000);
    } else if (message.body === '!jadwal') {
        sendMessageWithDelay(message.from, 'Senin-Jumat: 08:00-16:00\n Sabtu-Minggu: Tutup', 2000);
    } else if (message.body === '!alamat') {
        sendMessageWithDelay(message.from, 'Alamat: Jl. Mayor S.L. Tobing No.56, Sambongpari, Kec. Mangkubumi, Kab. Tasikmalaya, Jawa Barat 46181', 2000);
    } else if (message.body === '!telp') {
        sendMessageWithDelay(message.from, '(0265) 330171', 2000);
    } else if (message.body === '!email') {
        sendMessageWithDelay(message.from, 'bkpsdm@tasikmalayakab.go.id', 2000);
    }
});



// Function to send messages with delay
const sendMessagesWithDelay = (phoneNumbers, message, delay) => {
    return new Promise((resolve, reject) => {
        let index = 0;

        const sendMessage = () => {
            if (index < phoneNumbers.length) {
                const phoneNumber = phoneNumbers[index].trim() + '@c.us';
                client.sendMessage(phoneNumber, message).then(() => {
                    console.log(`Message sent to ${phoneNumber}`);
                    index++;
                    setTimeout(sendMessage, delay);
                }).catch(err => {
                    console.error(`Failed to send message to ${phoneNumber}`, err);
                    reject(err);
                });
            } else {
                resolve();
            }
        };

        sendMessage();
    });
};

// Create HTTP server to receive requests from Laravel
const server = http.createServer((req, res) => {
    const queryObject = url.parse(req.url, true).query;

    if (queryObject.phone && queryObject.message) {
        const phoneNumbers = queryObject.phone.split(',');
        const message = queryObject.message;
        const delay = 5000; // 5 seconds delay

        sendMessagesWithDelay(phoneNumbers, message, delay).then(() => {
            res.writeHead(200, {'Content-Type': 'text/plain'});
            res.end('Messages sent successfully\n');
        }).catch(error => {
            res.writeHead(500, {'Content-Type': 'text/plain'});
            res.end('Error sending messages: ' + error.message + '\n');
        });
    } else {
        res.writeHead(400, {'Content-Type': 'text/plain'});
        res.end('Bad Request: Missing phone or message parameter\n');
    }
});

server.listen(3000, () => {
    console.log('Server is listening on port 3000');
});

client.initialize();
