<main>
    <h2>Contactanos!</h2>
    <form action="enviar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" required>
        
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
</main>
