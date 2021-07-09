# Sistema de información para Clínica (Servicios de Urgencia y Admisión)
Este Sistema, fue una idea que se me ocurrió para acortar los tiempos en mi ex trabajo, y fue escrito en mis tiempos libres, mediante el editor de archivos de cpanel, debido a no poder instalar mas aplicaciones en los pcs. de el lugar.

<img src="https://www.rpi.cl/imagenes/logo.png" alt="Rpi"/>

Está escrito en php, con ayuda del framework LARAVEL, con un poco de JS, CSS mediante Bootstrap, y un par de templates bajadas de internet.
Los cambios que le hacía, eran en "producción", porque era sólo para uso interno de algunos funcionarios, a quienes yo daba acceso.

## Construido con 🛠️
El sistema, fue escrito con las siguientes tecnologías:

* [PHP]
* [LARAVEL (7.28.0)]
* [HTML]
* [CSS]
* [JS]
* [JQUERY]

## Descripción del Sistema 📄
En esencia, el sistema solamente es una colección de CRUDs, que permitía acceder a cierta información utilizada en el día a día, de unidades como urgencia, admisión, toma de muestras, imageonología, entre otros, y una parte de descarga de archivos.

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

* Auditorias
* valores
* pdf



## Partes del sistema faltantes por codificar ✒️

El proyecto quedó inconcluso, debido a que ya no trabajo en ese lugar, por tanto obviamente no seguí con el desarrollo.
Quedaron pendientes la parte de los CRUD completos de todas estas zonas, debido a que agregaba los registros a la base de datos directamente en phpmyadmin, no por medio de formularios.
Y en los casos donde la información era más grande, mediante instrucciones SQL a secas.

## Licencia 📄

Puedes ocupar este código y probarlo, cambiarlo o potenciarlo, a tu comodidad, a mi me sirvió para aprender de manera autodidacta, con san google y san stackoverflow entre otros.

## Si quieres probar este sistema ⚙️

Si quieres probar este sistema, y verlo como una base, o potenciarlo, deber seguir los siguientes pasos:



* 1 - Clonar o descargar este repositorio.
```
    $ git clone https://github.com/rparrar/SISTEMA_DE_INFO_CLINICA_ADMINISTRATIVA.git
```
* 2 - Actualizar componentes de laravel y node (dentro de la carpeta del repositorio).
```
    composer install
    npm install 
    npm run dev
```
* 3 - Crear archivo .env, puedes basarte en el .env.example
```
    configurar las variables de inicio (base de datos, usuario, password).
```
* 4 - Crear una base de datos en tu entorno (phpmyadmin, etc, debe ser mysql).
* 5 - Importar en tu base de datos, el contenido de archivo info.sql (en raiz del proyecto).
    Se importarán 2 usuarios:
```
    admin   => admin@admin.com => clave password, perfil admin.
    usuario => user@user.com   => clave password, perfil usuario.
```
* 6 - Nuevamente en la carpeta del proyecto
```
    php artisan key:generate => para generar llave de encriptación.
    php artisan serve => para desplegar servidor de pruebas.
```
### Todos estos pasos los acabo de probar y me funcionaron siguiendo este mismo "tutorial"


⌨️ con el ❤️ por [Roberto Parra](https://www.rpi.cl) 😊
