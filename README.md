# DockerLAMP
### A docker-compose enabled LAMP stack for PHP Development

## About
I am starting to really dislike creating a VM for every project I work on. I am starting to become a fan of Docker. This repo will spin up a LAMP stack with the www folder pointing to the web root of the Apache Server. The following services are exosed on their respective ports:

| Service | Port |
| ------- | ---- |
| Apache  |  80  |
| MariaDB | 3306 |

## Usage
### Install
- Make sure you have Docker and Docker Compose installed.
- Clone this repository and cd into it.
- Run `docker-compose up` (`docker-compose up -d` to run in background)

### Post-Install
- Still in the DockerLAMP directory, execute the initialization script by running `bash initialize.sh`
- This will create an admin user for the database so that you can manage the MariaDB instance through a tool like MySQL Workbench

### Developing
Any code written in the www directory of this repository is automagically mounted into the webroot of the apache server (yay Docker!) Any code written will automatically be visible at http://localhost without need of restarting the server.

## Stopping and Starting the server
`docker-compose down` will stop and REMOVE the built containers when run. If you run this command, you will need to run `docker-compose up` in order to start the service again. If you do not want to remove and recreate the containers every time you need the LAMP Stack (when working on a longer project), then you can use `docker-compose stop` and `docker-compose start`  to stop and start the Stack. The database volume PERSISTS unless specifically removed (See next section).

## Removing the LAMP Stack
In order to remove the LAMP Stack AND the database volume, run `docker-compose down --volumes` to delete the containers and the aassociated volumes for the stack. You can then use Docker to remove the aassociated images from your system if you choose.