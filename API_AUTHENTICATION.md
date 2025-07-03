# API de Autenticación - Sistema de Telemedicina

Esta documentación describe los endpoints de autenticación disponibles en el sistema de telemedicina.

## Base URL
```
http://tu-dominio.com/api
```

## Headers Requeridos
Para todas las rutas protegidas, incluir:
```
Authorization: Bearer {token}
Content-Type: application/json
Accept: application/json
```

---

## 🔐 Endpoints de Autenticación

### 1. Registrar Usuario
**POST** `/auth/register`

Registra un nuevo usuario en el sistema.

**Body (JSON):**
```json
{
    "name": "Juan Pérez",
    "email": "juan@ejemplo.com",
    "password": "contraseña123",
    "password_confirmation": "contraseña123"
}
```

**Respuesta Exitosa (201):**
```json
{
    "success": true,
    "message": "Usuario registrado exitosamente",
    "data": {
        "user": {
            "id": 1,
            "name": "Juan Pérez",
            "email": "juan@ejemplo.com",
            "created_at": "2025-07-03T10:30:00.000000Z"
        },
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
        "token_type": "Bearer"
    }
}
```

---

### 2. Iniciar Sesión
**POST** `/auth/login`

Autentica un usuario existente.

**Body (JSON):**
```json
{
    "email": "juan@ejemplo.com",
    "password": "contraseña123"
}
```

**Respuesta Exitosa (200):**
```json
{
    "success": true,
    "message": "Inicio de sesión exitoso",
    "data": {
        "user": {
            "id": 1,
            "name": "Juan Pérez",
            "email": "juan@ejemplo.com"
        },
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
        "token_type": "Bearer"
    }
}
```

---

### 3. Obtener Usuario Autenticado
**GET** `/auth/me`

Obtiene la información del usuario autenticado.

**Headers:**
```
Authorization: Bearer {token}
```

**Respuesta Exitosa (200):**
```json
{
    "success": true,
    "data": {
        "user": {
            "id": 1,
            "name": "Juan Pérez",
            "email": "juan@ejemplo.com",
            "email_verified_at": null,
            "created_at": "2025-07-03T10:30:00.000000Z"
        }
    }
}
```

---

### 4. Cerrar Sesión
**POST** `/auth/logout`

Cierra la sesión actual del usuario.

**Headers:**
```
Authorization: Bearer {token}
```

**Respuesta Exitosa (200):**
```json
{
    "success": true,
    "message": "Sesión cerrada exitosamente"
}
```

---

### 5. Cerrar Todas las Sesiones
**POST** `/auth/logout-all`

Cierra todas las sesiones activas del usuario.

**Headers:**
```
Authorization: Bearer {token}
```

**Respuesta Exitosa (200):**
```json
{
    "success": true,
    "message": "Todas las sesiones han sido cerradas"
}
```

---

### 6. Cambiar Contraseña
**PUT** `/auth/change-password`

Cambia la contraseña del usuario autenticado.

**Headers:**
```
Authorization: Bearer {token}
```

**Body (JSON):**
```json
{
    "current_password": "contraseñaActual123",
    "new_password": "nuevaContraseña456",
    "new_password_confirmation": "nuevaContraseña456"
}
```

**Respuesta Exitosa (200):**
```json
{
    "success": true,
    "message": "Contraseña cambiada exitosamente",
    "data": {
        "access_token": "nuevo_token_aqui...",
        "token_type": "Bearer"
    }
}
```

---

### 7. Actualizar Perfil
**PUT** `/auth/update-profile`

Actualiza la información del perfil del usuario.

**Headers:**
```
Authorization: Bearer {token}
```

**Body (JSON):**
```json
{
    "name": "Juan Carlos Pérez",
    "email": "juancarlos@ejemplo.com"
}
```

**Respuesta Exitosa (200):**
```json
{
    "success": true,
    "message": "Perfil actualizado exitosamente",
    "data": {
        "user": {
            "id": 1,
            "name": "Juan Carlos Pérez",
            "email": "juancarlos@ejemplo.com",
            "updated_at": "2025-07-03T11:30:00.000000Z"
        }
    }
}
```

---

## 🚨 Respuestas de Error

### Error de Validación (422)
```json
{
    "success": false,
    "message": "Error de validación",
    "errors": {
        "email": ["El email es obligatorio"],
        "password": ["La contraseña debe tener al menos 8 caracteres"]
    }
}
```

### Credenciales Incorrectas (401)
```json
{
    "success": false,
    "message": "Credenciales incorrectas"
}
```

### Token Inválido o Expirado (401)
```json
{
    "message": "Unauthenticated."
}
```

---

## 📝 Notas Importantes

1. **Tokens de Acceso**: Los tokens son de tipo Bearer y deben incluirse en el header `Authorization` para rutas protegidas.

2. **Seguridad**: Al cambiar la contraseña, todos los tokens existentes se invalidan y se genera uno nuevo.

3. **Validaciones**: Todos los campos de entrada son validados. Las respuestas de error incluyen mensajes descriptivos en español.

4. **Persistencia**: Los tokens se almacenan en la base de datos y pueden ser revocados individualmente.

5. **CORS**: Asegúrate de configurar CORS apropiadamente para permitir requests desde tu frontend.

---

## 🧪 Ejemplo de Uso con cURL

### Registro:
```bash
curl -X POST http://tu-dominio.com/api/auth/register \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "name": "Juan Pérez",
    "email": "juan@ejemplo.com",
    "password": "contraseña123",
    "password_confirmation": "contraseña123"
  }'
```

### Login:
```bash
curl -X POST http://tu-dominio.com/api/auth/login \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "email": "juan@ejemplo.com",
    "password": "contraseña123"
  }'
```

### Obtener usuario autenticado:
```bash
curl -X GET http://tu-dominio.com/api/auth/me \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```
