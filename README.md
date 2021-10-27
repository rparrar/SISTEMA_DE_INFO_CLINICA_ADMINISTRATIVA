# Sistema de información para Clínica (Servicios de Urgencia y Admisión)

<img src="https://www.rpi.cl/imagenes/logo.png" alt="Rpi"/>

Este Sistema, fue una idea que se me ocurrió para acortar los tiempos en mi ex trabajo, y fue escrito en mis tiempos libres, mediante el editor de archivos de cpanel, debido a no poder instalar mas aplicaciones en los pcs. de el lugar.

Está escrito en php, con ayuda del framework LARAVEL, con un poco de JS, CSS mediante Bootstrap, y un par de templates bajadas de internet.
Los cambios que le iba haciendo, eran en "producción", porque era sólo para uso interno de algunos funcionarios, y aparte por las limitaciones de acceso a escritura de código.

## Construido con 🛠️
El sistema, fue escrito con las siguientes tecnologías:

* [PHP]
* [LARAVEL (7.28.0)]
* [HTML]
* [CSS]
* [JS]
* [JQUERY]

## Descripción del Sistema 📄
En esencia, el sistema solamente es una colección de CRUDs, que muestran la información utilizada en el día a día, de unidades como urgencia, admisión, toma de muestras, imageonología, entre otros, y una parte de descarga de archivos.

La idea, es tener un accceso directo a varias secciones, así como:
```
Valores Imageonología = Muestra los valores de las prestaciones de imageonología.
Valores Laboratorio   = Muestra los valores de las prestaciones de toma de muestras.
Valores dia cama      = Muestra los valores de los día cama para hospitalizados.
Planes Cruz Blanca    = Muestra planes de cruz blanca, para saber si tenían convenio con la Clínica.
Bajar plan C. Blanca  = Para poder descargar planes, teniendo el código, descarga un PDF.
Códigos Integrales    = Muestra los códigos fonasa, de las prestaciones "Urgencia Integral".
Doctores              = Muestra los datos de los distintos doctores. 
Seguros               = Acceso a descarga de los pdf con formularios de aseguradoras. 
Anexos                = Los anexos del lugar, divididos en torre, piso y unidades. 
Descargas             = Para descargar los documentos que se utilizaban en la operación diaria.
Comunas               = Muestra todas las comunas de chile.
Datos transferencias  = Genera un pdf, para entregar a los clientes cuando pedían transferir.
Rotativa de urgencia  = Calendario, muestra las rotaciones y los turnos de los funcionarios.
                        (datos para ver desde ago - 2020 a ene - 2021)
Cortes de horas Extra = Mos cortes de H.E., para calcular lo que iba a sacar mes a mes.
```

## Secciones y "extras" del sistema funcionando en el código 📦

### Login
Utiliza la autenticación por defecto de laravel, agregando campos permisos, activo, para controlar justamente esto en los usuarios.
Pueden tener 2 perfiles, 1 de administrador con acceso a todo el sistema, o usuario, con restricciones a los CRUD.
Al ser un usuario recién creado por el administrador, valida sus permisos, y la clave de inicio, asignada automáticamente.
No permite avanzar al usuario, hasta que haya cambiado la clave inicial por una propia.
### Auditorías
El administrador, en su dashboard, puede ver a modo de auditorías, los ingresos de los usuarios, con fecha, hora, ip, y ip whois de esta, utilizando IP Geolocation API
 https://ipwhois.io/.
También puede crear nuevos usuarios, en donde la clave inicial es "123456".
Puede resetear esa clave, quedando la clave de origen="123456".
### Usuarios
Los usuarios pueden elegir el fondo de sus escritorios de trabajo, la opcion elegida queda guardada en base de datos, por tanto es persistente.


## Partes del sistema faltantes por codificar ✒️

El proyecto quedó inconcluso, debido a que ya no trabajo en ese lugar, por tanto obviamente no seguí con el desarrollo.
Quedaron pendientes la parte de los CRUD completos de todas estas zonas, debido a que agregaba los registros a la base de datos directamente en phpmyadmin, no por medio de formularios.
Y en los casos donde la información era más grande, mediante instrucciones SQL a secas.

## Licencia 📄

Puedes ocupar este código y probarlo, cambiarlo o potenciarlo, a tu comodidad, a mi me sirvió para aprender de manera autodidacta, con san google y san stackoverflow entre otros.

## Si quieres probar este sistema ⚙️

Si quieres probar este sistema, y verlo como una base, o potenciarlo, deber seguir los siguientes pasos:



1 - Clonar o descargar este repositorio.
```
$ git clone https://github.com/rparrar/SISTEMA_DE_INFO_CLINICA_ADMINISTRATIVA.git
```
2 - Actualizar componentes de laravel y node (dentro de la carpeta del repositorio).
```
composer update
npm install 
npm run dev
```
3 - Generar llave de encriptación
```
php artisan key:generate
```
4 - Crear archivo .env, basado en el .env.example
```
cp .env.example .env
```
5 - Configurar las variables de inicio (base de datos, usuario, password).
```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
6 - Crear una base de datos.
```
phpmyadmin, Mysql worbench, etc.
```
7 - Importar en tu base de datos, el contenido de archivo info.sql (en raiz del proyecto).
    Se importarán 2 usuarios:
```
admin   => admin@admin.com => clave password, perfil admin.
usuario => user@user.com   => clave password, perfil usuario.
```
8 - Iniciar servidor de pruebas
```
php artisan serve
```
### Todos estos pasos los acabo de probar y me funcionaron siguiendo este mismo "tutorial"


⌨️ con el ❤️ por [Roberto Parra](https://www.rpi.cl) 😊
