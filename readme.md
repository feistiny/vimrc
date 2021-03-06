# git clone in the root(~) dir #  
# ls aliases #  
alias l='ls -al'  
alias la='ls -a'  
alias lla='ll -a'  
alias lsd='ls -l | grep ^d'  
alias cls='clear; ls'  
alias cll='clear; ls -al'  
alias cla='clear; ls -a'  
alias vimu='vim -u ~/configs/.vimrc'  
# autojump #  
alias jj='j -s'  
# reaload aliases.sh #  
alias rea='source ~/configs/aliases.sh && echo "reloaded" && cp ~/configs/.tmux.conf ~/.tmux.conf'  
# easy to change directory #  
alias d='dirs -v'  
alias pu='pushd'  
alias po='popd'  
alias ..="cd .."  
alias ...="cd ../.."  
alias ....="cd ../../.."  
alias .....="cd ../../../.."  
# laravel artisan #  
alias cmp='composer --no-plugins'  
alias cmpdp="cmp dumpautoload"  
alias art=${php_artisan}  
alias art.cont="${php_artisan} make:controller"  
alias art.model="${php_artisan} make:model"  
alias art.mig="${php_artisan} make:migration"  
alias art.mid="${php_artisan} make:middleware"  
alias artm="${php_artisan} migrate"  
alias artms="${php_artisan} migrate:status"  
alias artmr="${php_artisan} migrate:rollback"  
alias db:reset="php artisan migrate:reset && php artisan migrate --seed"  
# git #  
alias gbr='git branch'  
alias gceu='gcf user.name "lzf" && gcf user.email "liuzhanfei167@126.com"'  
alias gcf='git config'  
alias gcia='git commit --amend -C HEAD'  
alias gciam='git commit -am'  
alias gci='git commit'  
alias gcii='git -c user.name="lzf" -c user.email="liuzhanfei166@126.com" commit'  
alias gcim='git commit -m'  
alias gcl='git clean'  
alias gco='git checkout'  
alias gdfc='git diff --cached'  
alias gdf='git diff'  
alias gfe='git fetch'  
alias gl='git log --oneline'  
alias gll="git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"  
alias gme='git merge'  
alias gnsw='git update-index --no-skip-worktree'  
alias gpl='git pull'  
alias gplr='git pull --rebase'  
alias gps='git push'  
alias grb='git rebase'  
alias grh='git reset HEAD'  
alias grmc='git rm --cached'  
alias grm='git rm'  
alias grs='git reset'  
alias grt='git remote'  
alias grp='git rev-parse'  
alias gsa='git stash apply'  
alias gsb='git subtree'  
alias gsh='git stash'  
alias gsl='git stash list'  
alias gsp='git stash pop'  
alias gst='git status'  
alias gsw='git update-index --skip-worktree'  
alias gdfd='gdfl diff'  
# docker #  
alias dcm="docker-compose"  
alias dex='docker exec -it'  
alias dim="docker images"  
alias din='docker inspect'  
alias dlg='docker logs'  
alias dps='docker ps'  
alias drm='docker rm $(docker ps -aq)'  
alias drmi='docker rmi'  
alias dstp='docker stop $(docker ps -aq)'  
alias dtp='docker top'   
alias gets='get_snippets'  
alias edits='edit_snippets'  
alias sets='set_snippets'  
alias setsd='set_snippets_heredoc'  
alias dels='delete_snippets'  
alias gdr='git_dir_worktree'  
