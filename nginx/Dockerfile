FROM nginx:stable

RUN apt-get update
RUN apt-get install -y vim

# COPY ../www/* /www/
COPY default.conf /etc/nginx/conf.d/default.conf

# VOLUME /usr/share/nginx/html
# COPY nginx.conf /etc/nginx/nginx.conf
