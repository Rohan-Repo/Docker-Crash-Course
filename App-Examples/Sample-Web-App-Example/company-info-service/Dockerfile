FROM python:3.12-bookworm

WORKDIR /usr/src/app

COPY api.py ./
COPY Data ./

COPY requirements.txt ./

ENV FLASK_APP=api.py
ENV FLASK_RUN_HOST=0.0.0.0

RUN pip install --no-cache-dir -r requirements.txt

EXPOSE 5000

#COPY src/api.py ./

#COPY src/Data ./

#CMD [ "python", "api.py" ]
#CMD [ "python", "-m", "flask", "run", "--host=localhost" ]
CMD [ "flask", "run" ]