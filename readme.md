# Build the image
`docker build -t joncox/swift .`

# Start the container
`docker run -itd -p 80 --privileged=true -v /local/path/to/swift:/var/www/html joncox/swift`

# Start the services
`docker exec -it *CONTAINER_ID* bash -c "service php5-fpm start && service nginx start"`
