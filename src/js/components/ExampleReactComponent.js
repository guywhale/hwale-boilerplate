import React, { useState } from "react";


const ExampleReactComponent = () => {
  // console.log('hello from ExampleReactComponent.js');
  const [clickCount, setClickCount] = useState(0);

  return (
    <div className="py-8 text-center text-white bg-gray-600" onClick={() => setClickCount(prev => prev + 1)}>
      <h2 className="mb-2">Hello from React!</h2>
      <p className="h3">
        You have clicked on this component <span className="font-bold text-red-500">{clickCount}</span> times.
      </p>
    </div>
  )
}

export default ExampleReactComponent;
