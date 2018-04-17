select a.t_id, a.s_uid, b.store_name, a.tk_id, a.subcat, a.comp_name, a.contact_person, 
a.second_contact_person,
a.second_contact_num, a.comment, a.submit_time, a.t_status, a.tech_uid, a.tech_comment, a
.tech_comment_time 
from sun_it_tickets a, sun_stores b
where a.store_id = b.store_id 
and 
lower(concat(ifnull(a.t_id,''),
ifnull(b.store_name,''),
ifnull(a.tk_id,''),
ifnull(a.submit_time,''),
ifnull(a.t_status,''),
ifnull(a.tech_uid,''),
ifnull(a.tech_comment_time,''))) like lower('%Blocked%')

select a.t_id, a.s_uid, b.store_name, a.tk_id, a.subcat, a.comp_name, a.contact_person, 
a.second_contact_person,
a.second_contact_num, a.comment, a.submit_time, a.t_status, a.tech_uid, a.tech_comment, a
.tech_comment_time 
from  sun_it_tickets a sun_stores b
where a.store_id = b.store_id 
and match (
a.s_uid,
a.store_id,
a.subcat,
a.comp_name,
a.contact_person,
a.second_contact_person,
a.second_contact_num,
a.comment,
a.t_status,
a.tech_comment) against ('+Blocked');

ALTER TABLE sun_it_tickets
ADD FULLTEXT INDEX `search_column`
(s_uid,
store_id,
subcat,
comp_name,
contact_person,
second_contact_person,
second_contact_num,
comment,
t_status,
tech_comment)


select t_id
from  sun_it_tickets
where match (t_id
s_uid,
store_id,
tk_id,
subcat,
comp_name,
contact_person,
second_contact_person,
second_contact_num,
comment,
t_status,
tech_uid,
tech_comment) against ('+Johnson');

