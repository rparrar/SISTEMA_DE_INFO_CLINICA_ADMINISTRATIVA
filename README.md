# Sistema de información Administrativa para funcionarios de Clinica (Servicios de Urgencia y Admisión)
Este Sistema, fue una idea que se me ocurrió para acortar los tiempos en mi ex trabajo, y fue escrito en mis tiempos libres, mediante el editor de archivos de cpanel, debido a no poder instalar mas aplicaciones en los pcs. de el lugar.

Está escrito en php, con ayuda del framework LARAVEL, con un poco de JS, CSS mediante Bootstrap, y un par de templates bajadas de internet.
Los cambios que le hacía, eran en "producción", porque era sólo para uso interno de algunos funcionarios, a quienes yo daba acceso.

## Construido con 🛠️
El sistema, fue escrito con las siguientes tecnologías:

* [PHP]
* [LARAVEL]
* [HTML]
* [CSS]
* [JS]
* [JQUERY]

## Descripción del Sistema 📄
En esencia, el sistema solamente es una colección de CRUDs, que permitía acceder a cierta información utilizada en el día a día, de unidades como urgencia, admisión, toma de muestras, imageonología, entre otros, y una parte de descarga de archivos.

La idea, era tener un accceso directo a varias partes, así como:
```
Valores Imageonología = Tabla mysql, + Datatables.net, muestra los valores de todas las prestaciones de imageonología.
Valores Imageonología = Tabla mysql, + Datatables.net, muestra los valores de todas las prestaciones de toma de muestras.
Valores dia cama      = Tabla mysql, + Datatables.net, muestra los valores de los día cama para hospitalizados.
Planes Cruz Blanca    = Tabla mysql, + Datatables.net, muestra los planes de cruz blanca, para saber si tenían convenio con esta Clínica.
Bajar plan C. Blanca  = Para poder descargar cualquier Plan, teniendo el código que se asigna a los planes, descarga un PDF.
Códigos Integrales    = Tabla mysql, + Datatables.net, muestra los códigos fonasa, de las prestaciones "Urgencia Integral".
Doctores              = Tabla mysql, + Datatables.net, muestra los datos de los distintos doctores. 
Seguros               = Tabla mysql, + Datatables.net, da los accesos a descarga de los pdf con formularios de aseguradoras. 
Anexos                = Tabla mysql, + Datatables.net, Los anexos del lugar, divididos en torre, piso y unidades. 
Descargas             = Tabla mysql, + Datatables.net, para descargar los distintos documentos que se utilizaban en la operación diaria.
Comunas               = Tabla mysql, + Datatables.net, la colección de comunas y ciudades de chile.
Datos transferencias  = Genera un pdf, para poder entregar a los clientes, cuando pedían los datos para transferir y pagar sus cuentas.
Rotativa de urgencia  = Implementación de fullcalendar https://fullcalendar.io/, para ir viendo las rotaciones y los turnos de los funcionarios.
Cortes de horas Extra = Tabla mysql, + los cortes de H.E., para calcular lo que iba a sacar mes a mes.
 ```

## Partes faltantes

El proyecto quedó inconcluso, debido a que ya no trabajo en ese lugar, por tanto obviamente no seguí con el desarrollo.
Quedaron pendientes la parte de los CRUD completos de todas estas zonas, por que agregaba los datos directamente en phpmyadmin, no por medio de formularios.
Y en los casos donde la información era más grande, mediante SQL a secas.

## Si quieres probar este sistema ⚙️

Si quieres probar este sistema, y verlo como una base, o potenciarlo, tienes que seguir los siguientes pasos:

1-
```
Clonar este repositorio
```

2-
```

```
