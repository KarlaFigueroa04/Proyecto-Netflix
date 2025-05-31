import { createConnection } from 'mysql2';

const conexion = createConnection({
    host: 'localhost',
    user: 'root', 
    password: '', 
    database: 'netflix-gt' 
});

conexion.connect((err) => {
    if (err) {
        console.error('Error al conectar: ' + err.stack);
        return;
    }
    console.log('Conectado como ID ' + conexion.threadId);
});

conexion.end();

