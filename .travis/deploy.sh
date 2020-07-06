#!/bin/bash
set -e
sshpass -p 'InteGr@ci0n' ssh root@198.199.65.103
# pull most current version of example web site container image
docker pull naverjan/laborico:travis

# stop and remove current container instance
docker rm -f exsite 

# run instance of newly-updated container image
docker run -p 80:80 naverjan/laborico:travis