select a.name, b.name, f.code
from my_db.lang a 
inner join my_db.type_task b on b.lang_id = a.id
inner join my_db.fr_code f on f.type_task_id = b.id
