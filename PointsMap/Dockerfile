# Construyendo el proyecto React
FROM node:latest
WORKDIR /app

# Obtiene todas las dependencias que requiere la aplicacion para su funcionamiento y las instala
COPY package.json ./
RUN npm install --legacy-peer-deps
COPY . .

# Ejecuta la aplicacion
CMD ["npm", "start"]