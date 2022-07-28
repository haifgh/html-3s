<html>
 <head>
  <title>Ansible Application</title>
  <link rel="stylesheet" href="assets/css/style.css"/>
 </head>
 <body>

 <div class="container">
    <button>
    <a href=http://{{ ansible_default_ipv4.address }}/index.html>HOMEPAGE</a>

    </button>
    <h1>    hello you are running this web site from our  Standard Sharing Software(3s) Cloud Platform,
</h1>

</div>
 
 <div class="container">
 
 
 <p class="typewriter">I am 
    <span data-text=" <?php echo exec('hostname'); ?> ,a web server configured,  using Ansible."></span>
  </p>
 </div>

 <div>
    <img src="assets/img/server.png"/>
 </div>
  </br>
  <a href=http://{{ ansible_default_ipv4.address }}/index.html>Homepage</a>
 </br>
<?php 
 
 
 echo  "List of Databases: </BR>";
         {% for host in groups['dbservers'] %}
                 $link = mysqli_connect('{{ hostvars[host].ansible_default_ipv4.address }}', '{{ hostvars[host].dbuser }}', '{{ hostvars[host].upassword }}') or die(mysqli_connect_error($link));
         {% endfor %}
         $res = mysqli_query($link, "SHOW DATABASES;");
        while ($row = mysqli_fetch_assoc($res)) {
                 echo $row['Database'] . "\n";
         }
?>

<script src="assets/js/main.js"></script>

</body>
</html>

