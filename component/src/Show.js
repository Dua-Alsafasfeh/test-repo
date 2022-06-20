import React, { Component } from 'react';

class Show extends Component {
  render(){
    const Duck=()=>{
      document.getElementById("txt").textContent+="quack! ";
    }

    return (
      <div>
        <img src="https://i.pinimg.com/originals/b7/a5/9d/b7a59d1c0637760445287af4ecd05f3b.gif"/>
      <div>
        <button onClick={Duck}>send</button>
      </div>
      <div id='txt'>

      </div>
      </div>

    );
  }
}
 
export default Show;
