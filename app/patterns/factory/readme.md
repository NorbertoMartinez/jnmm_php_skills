# Patterns 
### Factory

Demo1: Multiples proveedores de notificaciones/comunicacion en la logica de negocio.

Situación:
El servicio de notificaciones requiere un factory para crear las notificaciones

### Solucion

#### Interfaces:
- NotificationInterface

#### Notifications:
- SMSNotification
- EmailNotification
- WhatsappNotification

#### Factory
- NotificationFactory

#### Service
- NotificationService


