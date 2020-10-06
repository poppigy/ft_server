# docker container stop 21container
# docker container rm 21container
docker rm -f $(docker ps -aq)
docker rmi $(docker images -qa)
