#!/bin/bash

# Check if the deployment.json file exists
if [ ! -f deployment.json ]; then
    echo "Error: deployment.json file not found"
    exit 1
fi

# Read the deployment.json file and extract the host information
host=$(jq -r '.hosts[0]' deployment.json)
hostname=$(jq -r '.hostname' <<< "$host")
username=$(jq -r '.username' <<< "$host")
private_key=$(jq -r '.private_key' <<< "$host")
port=$(jq -r '.port' <<< "$host")
path=$(jq -r '.path' <<< "$host")
pre_commands=$(jq -r '.pre_commands[]' <<< "$host")

# Loop through the pre_commands and execute them
for cmd in $pre_commands; do
    # Display the command being executed
    echo "Running command: $cmd"

    # Execute the command
    eval "$cmd"
done

# Deploy to the host
echo "Connection to $hostname..."
ssh -i "$private_key" -t "$username@$hostname" "cd $path; . ~/.bash_profile; bash --rcfile ~/.bashrc; exec bash;"
