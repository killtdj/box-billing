# BOXBILLING


## Prerequisites
1.  Docker-CE (Community Edition)

Install docker before run this setup. Go to [Docker](https://www.docker.com/) to see how to install dan download Docker-CE.

## Project Structure
```
|app (all billing box source code app)
|docker-files
|--nginx
|----default.conf
docker-compose.yml
Dockerfile
```

## Installation
1.  Clone repo from [Github](https://github.com/killtdj/box-billing.git)
```sh
git clone https://github.com/killtdj/box-billing.git
```

2.  Run `docker-compose build` to build **Dockerfile**
3.  Run `docker-compose up -d` to create a containers from **docker-compose.yml**

4.  There sould be 3 Containers.

    - bb-db  #your database
    - bb-app #your boxbilling app
    - bb-webserver #your nginx webserver


5.  To start your billingbox `localhost:8004/install`. If you got an error in local environment, make sure if you run in `http` not in `https`. Or you can check the log via `docker logs -f <containers-name>`.

6.  Click next for Step 1 (Chech Requirement step)
7.  Fill the database credentials. Then click next to go through step 3. 
```text
host: db;
db_name: billingbox_db;
db_username: root;
db_password: root;
```

8.  Fill the user credentials for your boxbilling web app.

9.  Finish installation. Go to **Admin Panel** and login with your `email` and `password` to sign in the boxbilling web app.



