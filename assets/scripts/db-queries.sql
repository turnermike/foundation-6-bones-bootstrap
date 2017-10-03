---
--- SQL Commands
---

---
--- General
---

--- get the site url
select option_value from om21qxlqh_options where option_id = 1;



---
--- Dev
---

--- Connect
mysql -h localhost -u f6bb -p'N#skj&98SR%Jje' f6bb_website

--- Dump
docker exec -i f6bb-db mysqldump -uf6bb -p'N#skj&98SR%Jje' f6bb_website > ~/Sites/Bootstraps/foundation-6-bones-bootstrap/assets/database/development/latest.sql &&
docker exec -i f6bb-db mysqldump -uf6bb -p'N#skj&98SR%Jje' f6bb_website > ~/Sites/Bootstraps/foundation-6-bones-bootstrap/assets/database/development/greengiantwebsite_$(date +%Y-%m-%d_%H-%M-%S).sql

--- http://greengiant.dev to foundation-6-bones-bootstrap.dev
update om21qxlqh_options set option_value=replace(option_value,'http://greengiant.dev','http://foundation-6-bones-bootstrap.dev') where option_value like "%http://greengiant.dev%";
update om21qxlqh_posts SET guid=replace(guid, 'http://greengiant.dev','http://foundation-6-bones-bootstrap.dev');
update om21qxlqh_posts SET post_excerpt=replace(post_excerpt, 'http://greengiant.dev','http://foundation-6-bones-bootstrap.dev');
update om21qxlqh_posts SET post_content=replace(post_content, 'http://greengiant.dev','http://foundation-6-bones-bootstrap.dev');
update om21qxlqh_postmeta SET meta_value=replace(meta_value, 'http://greengiant.dev','http://foundation-6-bones-bootstrap.dev');

--- http://foundation-6-bones-bootstrap.dev to foundation-6-bones-bootstrap.dev:81
update om21qxlqh_options set option_value=replace(option_value,'http://foundation-6-bones-bootstrap.dev','http://foundation-6-bones-bootstrap.dev:81') where option_value like "%http://foundation-6-bones-bootstrap.dev%";
update om21qxlqh_posts SET guid=replace(guid, 'http://foundation-6-bones-bootstrap.dev','http://foundation-6-bones-bootstrap.dev:81');
update om21qxlqh_posts SET post_excerpt=replace(post_excerpt, 'http://foundation-6-bones-bootstrap.dev','http://foundation-6-bones-bootstrap.dev:81');
update om21qxlqh_posts SET post_content=replace(post_content, 'http://foundation-6-bones-bootstrap.dev','http://foundation-6-bones-bootstrap.dev:81');
update om21qxlqh_postmeta SET meta_value=replace(meta_value, 'http://foundation-6-bones-bootstrap.dev','http://foundation-6-bones-bootstrap.dev:81');

--- http://foundation-6-bones-bootstrap.dev:81 to foundation-6-bones-bootstrap.dev
update om21qxlqh_options set option_value=replace(option_value,'http://foundation-6-bones-bootstrap.dev:81','http://foundation-6-bones-bootstrap.dev') where option_value like "%http://foundation-6-bones-bootstrap.dev:81%";
update om21qxlqh_posts SET guid=replace(guid, 'http://foundation-6-bones-bootstrap.dev:81','http://foundation-6-bones-bootstrap.dev');
update om21qxlqh_posts SET post_excerpt=replace(post_excerpt, 'http://foundation-6-bones-bootstrap.dev:81','http://foundation-6-bones-bootstrap.dev');
update om21qxlqh_posts SET post_content=replace(post_content, 'http://foundation-6-bones-bootstrap.dev:81','http://foundation-6-bones-bootstrap.dev');
update om21qxlqh_postmeta SET meta_value=replace(meta_value, 'http://foundation-6-bones-bootstrap.dev:81','http://foundation-6-bones-bootstrap.dev');
