DIR=$(pwd)
echo $DIR
docker build -t vuln_app $DIR/lamp/.

docker run -d --name vuln_app vuln_app

docker pull jenkins

docker run -d -p 8080:8080 -p 50000:50000 -v $DIR/jenkins/:/var/jenkins_home jenkins
sleep 20

UPDATE=$(docker inspect vuln_app | grep IPAddress)
echo" Jenkins creds: admin:admin"
echo "You need to update demo job to match IP " $UPDATE
