PruebaTecnica

Consideracion:

La ejecucion tanto de las APIs como de la aplicación principal se montaron en windows 10, por lo que este instructivo solo se realiza para montarlo en este sistema operativo. En caso de tener otro sistema operativo se debe verificar que conflictos podria arrojar la aplicacion al momento de montarla t resolverlos segun sea el caso.

Requerimientos:

1. Instalar docker para windows.
2. Segun el navegador que tenga debe realizar lo siguiente:
    1. Firefox: 
        https://addons.mozilla.org/en-US/firefox/addon/cors-everywhere/

    2. Google chrome:
        1. Realizar una copia del acceso directo del navegador.
        2. Hacer click derecho sobre la copia del navegador seleccionar propiedades.
        3. En "Destino" se debe agregar "--disable-web-security" quedando la direccion de la siguiente forma C:\Program Files\Google\Chrome\Application\chrome.exe" --user-data-dir="C:/Chrome dev session" --disable-web-security
        4. Para mayor información ver el video del siguiente link: https://www.youtube.com/watch?v=4QTcQfjlfoI



