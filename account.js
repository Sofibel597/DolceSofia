// Función para mostrar los datos del usuario
function displayUserData() {
    document.getElementById('user-name').textContent = user.name;
    document.getElementById('user-email').textContent = user.email;
    document.getElementById('user-address').textContent = user.address;
}

// Función para eliminar la cuenta
function deleteAccount() {
    // Confirmar con el usuario antes de eliminar
    const confirmation = confirm("¿Estás seguro de que quieres eliminar tu cuenta? Esta acción es irreversible.");
    
    if (confirmation) {
        // Aquí podrías realizar una solicitud al backend para eliminar la cuenta (Ej. mediante AJAX)
        alert("Tu cuenta ha sido eliminada.");
        // Simulamos que se elimina la cuenta, y redirigimos al usuario a la página principal.
        window.location.href = "index.html";
    }
}

// Mostrar los datos del usuario al cargar la página
window.onload = displayUserData;