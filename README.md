visit www.dunedincomedy.co.nz

DOCKER COMMANDS

# start
docker-compose up -d

# remove everything
docker stop $(docker ps -q)
docker-compose rm -v
docker volume rm lampdevel_database_data

# start shell in container
docker exec -it container bash


INSTALLATION INSTRUCTIONS
# CentOS 7 machine
sudo yum install git
sudo yum install wget

# docker 1.12.6
wget https://yum.dockerproject.org/repo/main/centos/7/Packages/docker-engine-1.12.6-1.el7.centos.x86_64.rpm
sudo yum install docker-engine-1.12.6-1.el7.centos.x86_64.rpm

# docker-compose 1.11.2
wget https://github.com/docker/compose/releases/download/1.11.2/docker-compose-Linux-x86_64
chmod +x docker-compose-Linux-x86_64
sudo cp docker-compose-Linux-x86_64 /usr/bin/docker-compose

########### REBOOT MACHINE ###########

# start docker service
sudo service docker start

# copy project
git clone https://github.com/rcrimp/AnatomyViewer.git

# boot docker container
sudo docker-compose up -d

# local windows machine
Docker quick start terminal
docker-compose up -d

########### DOCKERS IS NOW RUNNING ###########
 
restart docker
docker stop $(docker ps -aq)
docker rm $(docker ps -aq)
docker rmi $(docker images -q)
docker-compose up -d




########### EDIT DOCKER CONTAINERS ###########

# find local ip to connect to view with browser
docker-machine ip

# manually edit database
docker exec -it dunedincomedydocker_mysql_1 bash
mysql -u root -p dunedincomedy
docker

# manually edit file directory
docker exec -it dunedincomedydocker_php_1 bash
