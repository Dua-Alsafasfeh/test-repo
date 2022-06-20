import React from "react";
import "./App.css";
import NewComp from "./Component/NewComp";
class App extends React.Component {
  render() {
    return (
      <div className="App">
    <h1>Hello</h1>
    <NewComp/>
    </div>
    );

  }
};
export default App;
