#FROM python:3.12-bookworm

FROM python:3.12.0-alpine3.18

WORKDIR /usr/src/app

COPY src/ ./

RUN pip install pytz

CMD [ "python", "app.py" ]