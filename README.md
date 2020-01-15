
# MockupTwig

## Introducción.

Cuando se va a construir la maqueta de un sitio web, por lo general, se necesitará crear un archivo HTML por cada página temática del sitio, el cual contendrá el diseño de la respectiva página. Por lo general, todas las páginas incluirán ciertas secciones comunes como es el caso de la cabecera, el pie de página, etc. Si cada archivo HTML es creado de manera manual, será necesario copiar y pegar en cada uno de ellos, todo el código HTML de cada sección común. Esta tarea, además de resultar muy tediosa, tiene la desventaja de que si por alguna razón, se necesita cambiar algún contenido común una vez que ya están creados todos o algunos archivos, será necesario entonces editar manualmente cada archivo para realizarle la respectiva actualización.

Justamente para evitar este tipo de problema es que existe `MockupTwig`. Este proyecto propone que los archivos HTML no sean creados directamente por los usuarios, y en cambio, que se creen plantillas Twig que al compilarlas sean capaces de producir dichos archivos. De esta manera, cuando se necesite realizar alguna modificación, bastará con editar el correspondiente archivo Twig y con solo ejecutar un comando se aplicarían los cambios a todos los archivos HTML.

## Instalación.

    $ composer create-project andaniel05/mockup-twig <directory> dev-master

>Sustituya `<directory>` por el nombre de la carpeta que almacenará el proyecto.

## Uso de MockupTwig.

Una vez que se ha realizado la instalación, encontrará que dentro del directorio de su proyecto, existirán los directorios `output` y `templates`.

Todos los recursos web de su proyecto, como hojas de estilo, imágenes, *scripts*, etc, deberán ser almacenados en `output` ya que será en este directorio donde serán generados los archivos HTML.

Por otra parte, en el directorio `templates` será donde deberán ser almacenados los archivos Twig de sus plantillas.

La compilación de los archivos HTML a partir de las plantillas Twig se realiza ejecutando el comando:

    $ ./vendor/bin/robo compile

## Recursos útiles.

1. [Twig for Template Designers](https://twig.symfony.com/doc/3.x/templates.html)