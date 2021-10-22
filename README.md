# PruebaTecnica

## Consideración:

La ejecución tanto de las APIs como de la aplicación principal se montaron en Windows 10, por lo que este instructivo solo se realiza para montarlo en este sistema operativo. En caso de tener otro sistema operativo se debe verificar que conflictos podría arrojar la aplicación al momento de montarla resolverlos según sea el caso.

## Requerimientos:

1. Instalar Docker para Windows.
    1. Es posible que aparezcan errores al instalar docker en windows, pero se soluciona siguiendo el tutorial del siguiente enlace: https://www.vicolinker.net/docker-desktop-wsl2-installation-incomplete/
2. Según el navegador que tenga debe realizar lo siguiente:
    1. Firefox: 
        1. Instalar la extensión que se encuentra en el siguiente enlace: https://addons.mozilla.org/en-US/firefox/addon/cors-everywhere/
        2. Tras la instalación de la extensión en el navegador, saldrá CORS desactivado tal como se muestra en la siguiente imagen: 
        
        &nbsp; 
        ![CORS en Firefox desactivado](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/FirefoxCorsDesactivado.PNG)
        &nbsp;
        
        3. Para activar los CORS se debe hacer clic en el icono "CORS E" y cuando aparezca en verde significa que está activado tal como se muestra en la siguiente imagen:
        
        &nbsp;
        ![CORS en Firefox activado](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/FirefoxCorsActivado.PNG)
        &nbsp;
        
    2. Google Chrome:
        1. Instalar la extensión que se encuentra en el siguiente enlace: https://chrome.google.com/webstore/detail/allow-cors-access-control/lhobafahddgcelffkeicbaginigeejlf?hl=es
        2. Tras la instalación la instalación de la extensión en el navegador, este se encuentra icono de extensiones. Para acceder a la extensión se debe hacer clic en el icono anterior y desplegara todas las extensiones que tiene instaladas. Posteriormente debe seleccionar la extensión con nombre Access-Control-Allow-origin. En la siguiente imagen se puede apreciar el procedimiento:
        
        &nbsp;
        ![CORS en Google Chome oculto](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/GoogleCors.PNG)
        &nbsp;
        
        3. Una vez seleccionada la extensión se mostrará un recuadro con el icono de la extensión en gris y se puede observar que aparece un toggle que por defecto esta desactivado tal como se muestra en la siguiente imagen:
        
        &nbsp;
        ![CORS en Google Chrome desactivado](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/GoogleCorsDesactivado.PNG)
        &nbsp;
        
        4. Para activar los CORS se debe hacer clic en el icono toggle y cuando el icono de la extensión aparezca en color significa que está activado tal como se muestra en la siguiente imagen:
        
        &nbsp; 
        ![CORS en Google Chrome activado](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/GoogleCorsActivado.PNG)
        &nbsp;

## Proceso para montar la aplicación

1. Descargar el repositorio
2. Abrir cmd de Windows tecla Windows + r
3. Lo primero es montar las APIs:
    1. Acceder por cmd a la carpeta API (con el comando ```cd <nombre de la carpeta>``` para ingresar a las carpetas y el comando dir para ver el contenido de la carpeta que actualmente se encuentra en cmd)
    2. 
    &nbsp;
    ![Ver contenido de la carpeta actual por el comando ```dir``` e ingresar a la carpeta por el comando ```cd```](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/AccesoCarpetaCMD.PNG)
    &nbsp;
    
    2. Posteriormente se debe construir la imagen de Docker con el comando ```docker build -t <nombre de la etiqueta> .```
    
    &nbsp;
    ![Comando de creación imagen de las APIs](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/ComandoInstalacionAPI.PNG)
    &nbsp;
    
    3. Posteriormente se verifica si está creada la imagen con el comando ```docker images```
    
    &nbsp;
    ![Verificación imagen de las APIs](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/VerificacionImagenAPI.PNG)
    &nbsp;
    
    4. Ejecutar la imagen para poder acceder a las APIs se realiza con el comando ```docker run -p 80:80 -d <nombre de la imagen>```
    
    &nbsp;
    ![Verificación imagen de las APIs](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/EjecucionImgenAPIs.PNG)
    &nbsp;
    
    5. Para verificar si están ejecutándose las imágenes, se puede acceder en el navegador a la ruta ```localhost/APIOpciones``` y ```localhost/APIPois```
    
    &nbsp;
    ![Ver API de opciones en el navegador](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/APIOpciones.PNG)
    &nbsp;
    
    &nbsp;
    ![Ver API de Points en el navegador](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/APIPois.PNG)
    &nbsp;
    
4. Lo segundo es montar la aplicación web y para ello se debe realizar los siguientes pasos:
    1. Acceder por cmd a la carpeta PointsMap que es donde se encuentra la aplicación web (con el comando ```cd <nombre de la carpeta>``` para ingresar a las carpetas, con el comando ```dir``` es para ver el contenido de la carpeta que actualmente se encuentra en cmd y con ```cd ..``` es para volver a una carpeta anterior)
    
    &nbsp;
    ![Ver contenido de la carpeta actual por el comando ```dir``` e ingresar a la carpeta por el comando ```cd``` o volver a una carpeta anterior con el comando ```cd ..```](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/AccederPointsMap.PNG)
    &nbsp;
    
    2. Posteriormente se debe construir la imagen de docker con el comando ```docker build -t <nombre de la etiqueta> .```
    
    &nbsp;
    ![Comando de creación imagen de PointsMap](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/ComandoInstalacionPointsMap.PNG)
    &nbsp;
    
    &nbsp;
    ![Creación e instalación imagen de PointsMap](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/InstalacionPointsMap.PNG)
    &nbsp;
    
    3. Posteriormente se verifica si está creada la imagen con el comando ```docker images```
    
    &nbsp;
    ![Verificación imagen de PointsMap](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/VerificacionImagenPointsMap.PNG)
    &nbsp;
    
    4. Ejecutar la imagen para poder acceder a la aplicación PointsMap se realiza con el comando ```docker run -p 3000:3000 -d <nombre de la imagen>```
     
    &nbsp;
    ![Verificación imagen de la aplicación PointsMap](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/EjecucionImgenPointsMap.PNG)
    &nbsp;
    
    5. Para verificar si están ejecutándose la imagen de la aplicación PointMap, se puede acceder en el navegador a la ruta ```localhost:3000```
    
    &nbsp;
    ![Ver API de opciones en el navegador](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/PointsMap.PNG)
    &nbsp;
    
## Proceso para detener la ejecución de las imágenes

Para detener las imágenes basta con utilizar el comando ```docker stop <CONTAINER ID>``` tal y como se muestra a continuación

&nbsp;
![Detener ejecución de APIs y la aplicación PointsMap](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/DetencionEjecucionImagenes.PNG)
&nbsp;
