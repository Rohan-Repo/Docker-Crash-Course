FROM node:20-alpine3.17

COPY package.json /app/
COPY app.js /app/

WORKDIR /app

# It was unable to find Express module so we specifically added the below line
RUN npm install express

RUN npm install

CMD [ "node", "app.js" ]