FROM php:8.2
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY ../.. /app
WORKDIR /app
CMD ["php", "-S", "0.0.0.0:8082"]