FROM php:8.0-fpm
RUN apt-get update
RUN apt-get install git bash zsh -y
RUN sh -c "$(wget -O- https://github.com/deluan/zsh-in-docker/releases/download/v1.1.1/zsh-in-docker.sh)" -- \
    -p git -p ssh-agent -p 'history-substring-search' \
    -a 'bindkey "\$terminfo[kcuu1]" history-substring-search-up' \
    -a 'bindkey "\$terminfo[kcud1]" history-substring-search-down'
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www

