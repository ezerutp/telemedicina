# Archivo de pruebas para la API de Autenticación

## Usuarios de prueba disponibles:
- **Administrador**: admin@telemedicina.com / password123
- **Médico**: medico@telemedicina.com / password123  
- **Paciente**: paciente@telemedicina.com / password123

## Comandos cURL para probar la API:

### 1. Registrar nuevo usuario
```bash
curl -X POST http://localhost:8000/api/auth/register \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "name": "Usuario Prueba",
    "email": "prueba@test.com",
    "password": "password123",
    "password_confirmation": "password123"
  }'
```

### 2. Iniciar sesión
```bash
curl -X POST http://localhost:8000/api/auth/login \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "email": "admin@telemedicina.com",
    "password": "password123"
  }'
```

### 3. Obtener información del usuario (requiere token)
```bash
curl -X GET http://localhost:8000/api/auth/me \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

### 4. Cerrar sesión (requiere token)
```bash
curl -X POST http://localhost:8000/api/auth/logout \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

## Para iniciar el servidor de desarrollo:
```bash
php artisan serve
```

La API estará disponible en: http://localhost:8000/api
