## S.O.L.I.D.

## SRP Single Responsability Principle

---

Demo 1: User Manager, una clase con varias responsabilidades a la hora de crear un usuario.

Responsabilidades de la clase:
- Persistencia
- Validación
- Comunicación


Solución:

Se abtraen las responsabilidades en distintas clases:

- EmailService -> Comunicación
- UserRepository -> Persistencia
- UserRequest -> Validación
- UserService -> Logica de negocio
- User -> Dominio