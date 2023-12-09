# plg_log
Ao resto dos colegas de trabalho (voce sabe que isso fica né genio) segue-se os comandos para executar o docker-compose.yml

sudo docker-compose up -d <br>
sudo docker-compose build <br>
sudo docker exec -it mysql_plg mysql -u root -p <br>

source /docker-entrypoint-initdb.d/config.sql<br>
exit<br>

docker ps<br>
docker exec -it 72b315aa7c5d /bin/bash "use o do php"<br>

chmod -R 755 /var/www/html/src/report/generate_report.php<br>

caso tenha sido criado o relatorio ja<br>

chmod -R 755 /var/www/html/src/report/Relatorios/relatorio_data.xlsx<br>

<h3>Para o funcionamento da geração de Relatorio</h3>
deve-se usar algumas bibliotecas segue-se o procresso de instalação<br>
<ul>
  <li>sudo apt update</li>
  <li>sudo apt install php-xml</li>
  <li>sudo apt install php-gd</li>
  <li>sudo apt install php-simplexml</li>
  <li>sudo apt install php-xmlreader</li>
  <li>sudo apt install php-xmlwriter</li>
  <li>sudo apt install php-zip</li>
</ul>
