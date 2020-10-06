if grep -q "autoindex on;" /etc/nginx/sites-available/qcraghas
then sed -i 's/autoindex on;/autoindex off;/' /etc/nginx/sites-available/qcraghas
nginx -s reload
elif grep -q "autoindex off;" /etc/nginx/sites-available/qcraghas
then sed -i 's/autoindex off;/autoindex on;/' /etc/nginx/sites-available/qcraghas
nginx -s reload
fi
