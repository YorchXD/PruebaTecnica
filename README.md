PruebaTecnica

Consideración:

La ejecución tanto de las APIs como de la aplicación principal se montaron en Windows 10, por lo que este instructivo solo se realiza para montarlo en este sistema operativo. En caso de tener otro sistema operativo se debe verificar que conflictos podría arrojar la aplicación al momento de montarla t resolverlos según sea el caso.

Requerimientos:

1. Instalar Docker para Windows.
2. Según el navegador que tenga debe realizar lo siguiente:
    1. Firefox: 
        1. Instalar la extensión que se encuentra en el siguiente enlace: https://addons.mozilla.org/en-US/firefox/addon/cors-everywhere/
        2. Tras la instalación, en el navegador saldrá CORS desactivado tal como se muestra en la siguiente imagen: ![CORS en Firefox desactivado](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/FirefoxCorsDesactivado.PNG)
        3. Para activar los CORS se debe hacer clic en el icono "CORS E" y cuando aparezca en verde significa que esta activado tal como se muestra en la siguiente imagen: ![CORS en Firefox activado](https://github.com/YorchXD/PruebaTecnica/blob/docker/Images/FirefoxCorsDesactivado.PNG)
        
    2. Google Chrome:
        1. Realizar una copia del acceso directo del navegador.
        2. Hacer clic derecho sobre la copia del navegador seleccionar propiedades.
        3. En "Destino" se debe agregar "--disable-web-security" quedando la direccion de la siguiente forma C:\Program Files\Google\Chrome\Application\chrome.exe" --user-data-dir="C:/Chrome dev session" --disable-web-security
        4. Para más información ver el video del siguiente enlace: https://www.youtube.com/watch?v=4QTcQfjlfoI




