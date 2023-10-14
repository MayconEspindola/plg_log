# plg_log
Ao resto dos colegas de trabalho (vabundos) segue-se os comandos para executar o docker-compose.yml

docker-compose up -d <br>
docker-compose build <br>
docker exec -it mysql_plg mysql -u root -p <br>

GRANT ALL PRIVILEGES ON plg_log.* TO 'adm_plg'@'%'; <br>
GRANT ALL PRIVILEGES ON plg_log_adm.* TO 'adm_plg'@'%'; <br>
FLUSH PRIVILEGES; <br>

source /docker-entrypoint-initdb.d/plg_log_adm.sql <br>
source /docker-entrypoint-initdb.d/plg_log_geral.sql
