import React from "react";
import { Button } from "react-bootstrap";

function Fun() {
    const add=()=>{
        console.log("team1");

    };
    return(
        <button onClick={add}>add</button>
    );

    
};
export default Fun;