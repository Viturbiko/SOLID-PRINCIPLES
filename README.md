# PRINCIPIOS SOLID
Teoría principios SOLID

# SINGLE RESPONSIBILITY PRINCIPLE
## Concepto:
- Una clase = Un concepto y responsabilidad
- Una clase debería tener sólo 1 razón para cambiar

## Cómo conseguirlo:
- Clases pequeñas con objetivos acotados

## Finalidad: 
- Alta cohesión y robustez
- Permitir composición de clases (inyectar colaboradores)
- Evitar duplicidad de código

## Niveles de granularidad
```
Order | User
```
- Son modelos de dominio, no servicios.

```
OrderAnalyzer | OrderProcessor
```
- Términos genéricos nos abocan a acabar con más de 1 responsabilidad.

```
OrderTrustabilityChecker | OrderMarginCalculator
```
- Más específico. No abre la puerta a añadir más funcionalidades :+1:

- Ejemplo: Conexión a base de datos representada en una clase aislada de la clase que obtiene los usuarios o vídeos
