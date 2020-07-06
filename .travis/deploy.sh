#!/bin/bash
set -e
sshpass -p 'InteGr@ci0n' ssh root@198.199.65.103
# pull most current version of example web site container image
docker pull naverjan/laborico

# stop and remove current container instance
docker rm -f exsite 

# run instance of newly-updated container image
docker run -d -p 80:80 --name naverjan/laborico