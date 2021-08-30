FROM php:fpm-alpine


# Install dev dependencies
RUN apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    curl-dev \
    imagemagick-dev \
    libtool \
    libxml2-dev \
    oniguruma-dev \
    postgresql-dev \
    sqlite-dev \
    icu-dev \
    gettext \
    gettext-dev


# Install production dependencies
RUN apk add --no-cache \
    bash \
    curl \
    g++ \
    gcc \
    git \
    imagemagick \
    libc-dev \
    libpng-dev \
    make \
    mysql-client \
    nodejs \
    yarn \
    openssh-client \
    postgresql-libs \
    rsync \
    zlib-dev \
    libzip-dev \
    git\
    libxml2-dev \
    php-soap



# Install and enable php extensions
RUN docker-php-ext-configure zip \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure gettext \
    && docker-php-ext-install \
    intl \
    gettext
RUN docker-php-ext-install \
    calendar \
    curl \
    exif \
    mbstring \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    pdo_sqlite \
    pcntl \
    tokenizer \
    xml \
    gd \
    zip \
    bcmath \
    soap \
    gettext


# Install composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

# Install PHP_CodeSniffer
RUN composer global require "squizlabs/php_codesniffer=*"

RUN apk add --no-cache openssl

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz


ENV PATH="/root/.composer/vendor/squizlabs/php_codesniffer/bin/:${PATH}"

# Instalação e configuração do XDebug
RUN pecl install xdebug && docker-php-ext-enable xdebug



WORKDIR /var/www


RUN ln -s public html

EXPOSE 9000
ENTRYPOINT ["php-fpm"]