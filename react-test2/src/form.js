import React from 'react';

function Form() {
    const setLogin=()=>{
        console.log('Enter your Email and password');
    };
    return (
        <form>
            <label htmlFor="email">Email</label>
            <input type="email" name="email" id="email" />
            <label>Password</label>
            <input type="password" name="pass" id="" />
            <button type='submit' onClick={setLogin}>Login</button>
        </form>
    );
};
export default Form;