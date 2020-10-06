docker rm -f $(docker ps -aq)
docker build -t 21image .
docker run -d -p 80:80 -p 443:443 --name 21container 21image
