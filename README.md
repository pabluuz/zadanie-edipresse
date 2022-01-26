# Zadanie 1
```
select user.nick as "Nick", user.name as "Name", tags.tag as "Tag", count(post.tag_id) as "Liczba Postów"
from post
left join user on post.user_id = user.user_id
left join tags on post.tag_id = tags.tag_id
group by user.user_id, post.tag_id
having count(post.tag_id) > 5
order by count(post.tag_id) desc
```

Przykład z danymi:  
http://sqlfiddle.com/#!9/c81772/11  

# Zadanie 2
Rozwiązanie umieściłem jako content tego repo

# Zadanie 3
1. git clone https://github.com/jakies_tam_repo.git  
2. cd jakies_tam_repo  
git branch Branch1  
3. git checkout Branch1  
touch test.txt  
git add .  
git commit -m "commit message"  
4. (lokalnie? zakładam, że tak):  
git checkout master  
git merge Branch1  
git commit
