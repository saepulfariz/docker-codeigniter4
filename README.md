# Docker Codeigniter 4

## Setup

- New project or copy your project
```
docker-compose run --rm app composer create-project codeigniter4/appstarter .
```
- Running this command to build container
```
docker compose up -d --build
```
- To stop 
```
docker compose down
```

## Fix Project
- Fix writable  
```
sudo chmod -R 777 ./writable
```

