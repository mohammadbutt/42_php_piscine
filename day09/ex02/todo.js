/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   todo.js                                            :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mbutt <mbutt@student.42.fr>                +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2020/03/07 19:36:51 by mbutt             #+#    #+#             */
/*   Updated: 2020/03/07 23:44:41 by mbutt            ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

/*
    References:
    https://stackoverflow.com/questions/2980143/i-want-to-store-javascript-array-as-a-cookie
*/

let global_i = 0;
let cookie_array = [];
window.onload = function()
{ 
    let json_stored_string = document.cookie;
    let new_array = JSON.parse(json_stored_string);
}

function set_cookie(cookie_name, cookie_value)
{
    let one_day_time_in_seconds = 1 * 60 * 60 + 2; 
    let new_date = new Date();
    new_date.setTime(new_date.getTime() + one_day_time_in_seconds);
    let expire_cookie_time = "expires=" + new_date.toUTCString();
    document.cookie = cookie_name + "=" + cookie_value + "; " + expire_cookie_time + ";path=/";
}

function get_cookie(cookie_name)
{
    let name = cookie_name + "=";
    let cookie_file = document.cookie.split(';');
    let i = 0;
    let len = cookie_file.length;
    while(i < len)
    {
        let cookie = cookie_file[i];
        while(cookie.charAt(0) == ' ')
            cookie = cookie.substring(1);
        i++;
        if(cookie.indexOf(name) == 0)
            return(cookie.substring(name.length, cookie.length));
    }
    return (null);

}
function delete_note(index_of_cookie)
{
    console.log("clicked: ", index_of_cookie);
        cookie_array.splice(index_of_cookie, 1);
    console.log("After deleting cookie\n");
    console.log(cookie_array);
    index_of_cookie.parentNode.removeChild(index_of_cookie);
    global_i--;
}
function open_note_field()
{
    let user_to_do_list = prompt("Enter your todo list: ");
    cookie_array.push(user_to_do_list);
    let json_string =JSON.stringify(cookie_array);
    set_cookie("mycookie", json_string);  
    console.log(user_to_do_list);
    console.log("Printing stored cookies\n");
    let json_stored_string = get_cookie("mycookie");
    let new_array = JSON.parse(json_stored_string);
    let div = document.createElement("div");
    div.setAttribute("onclick", "delete_note(this)");
    div.setAttribute("index", "global_i");
    div.className = "ft_list_class";
    div.innerHTML = new_array[global_i++];
    document.body.appendChild(div);
    console.log(new_array);
}

let new_task = document.getElementById("new_task");
new_task.addEventListener("click", open_note_field);
console.log(new_task);