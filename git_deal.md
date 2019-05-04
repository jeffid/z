## 更换远程地址时无法同步的问题

```
#按指定的远程端与本地分支合并
git pull <remote> <branch>

#If you wish to set tracking information for this branch you can do so with:
git branch --set-upstream-to=origin/<branch> master
```
本地master分支的远程分支未指定
```
$ git remote show origin
* remote origin
  Fetch URL: git@github.com:jeffid/z.git
  Push  URL: git@github.com:jeffid/z.git
  HEAD branch: master
  Remote branches:
    dev    tracked
    master tracked
  Local refs configured for 'git push':
    dev    pushes to dev    (fast-forwardable)
    master pushes to master (local out of date)
```
指定分支合并
```
git pull origin master
```
问题解决
```
$ git remote show origin
* remote origin
  Fetch URL: git@github.com:jeffid/z.git
  Push  URL: git@github.com:jeffid/z.git
  HEAD branch: master
  Remote branches:
    dev    tracked
    master tracked
  Local refs configured for 'git push':
    dev    pushes to dev    (fast-forwardable)
    master pushes to master (fast-forwardable)
```