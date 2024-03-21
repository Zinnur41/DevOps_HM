#!/bin/bash

log() {
    echo "$(date +'%Y-%m-%d %H:%M:%S') $1"
    echo "$(date +'%Y-%m-%d %H:%M:%S') $1" >> log/log_file.log
}

create_user_directory() {
    username=$1
    directory=$2
    mkdir -p "$directory/$username"
    chmod 755 "$directory/$username"
    chown "$username:$username" "$directory/$username"
    log "create directory $directory/$username and add 755 root"
}

if [ "$1" == "-d" ]; then
    root_directory="$2"
else
    read -p "enter the path to the root directory: " root_directory
fi

if [ ! -d "$root_directory" ]; then
    log "error: This directory not found"
    exit 1
fi

log "creating user directories"

while IFS=: read -r username _; do
    if [ "$username" != "nobody" ]; then
        create_user_directory "$username" "$root_directory"
    fi
done < /etc/passwd

log "creating directories completed"
