<h1 align="center"><a href="https://github.com/AkmalSyawqi/semantikweb" target="_blank">MCU Search</a></h1>

## About Projects

MCU Search adalah website yang dapat membantu anda mencari data-data terkait film MCU seperti, durasi film, budget syuting, dll. Website ini dibangun dengan Bootstrap, Apache Jena Fuseki, NGROK dan SPARQL.

### Built With

- [Bootstrap](https://getbootstrap.com/)
- [XAMPP](https://www.apachefriends.org/download.html)
- [Apache Jena Fuseki](https://jena.apache.org/documentation/fuseki2/index.html)
- [NGROK](https://ngrok.com/)

## Requirements

<ul>
    <li>Git</li>
    <li>Composer</li>
    <li>XAMPP</li>
    <li>PHP 7.3+</li>
    <li>Browser</li>
    <li>Apache Jena Fuseki</li>
    <li>NGROK</li>
</ul>

## Installation

1. Prepare and install all Requirements
2. Clone Project on XAMPP folder (../xampp/htdocs)
   ```sh
       git clone https://github.com/AkmalSyawqi/semantikweb
   ```
3. Run Apache Jena Fuseki on root folder
   ```sh
       fuseki-server
   ```
4. Run NGROK on port 3030
   ```
       ngrok http 3030
   ```
5. Add turtle file on `/src/sparql/data.ttl` to Apache Jena Fuseki on http://localhost:3030/
6. Run the app
   ```sh
       http://localhost/semantikweb/
   ```

## Author

| NPM          | Name               |
| ------------ | ------------------ |
| 140810190046 | Akmal Syawqi Albar |
